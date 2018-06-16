<?php

namespace App\Http\Controllers;

use App\Http\Repositories\ImageRepository;
use App\Http\Repositories\UserRepository;
use App\Http\Requests;
use App\User;
use Gate;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $imageRepository;

    protected $userRepository;

    /**
     * UserController constructor.
     * @param UserRepository $userRepository
     * @param ImageRepository $imageRepository
     */
    public function __construct(UserRepository $userRepository, ImageRepository $imageRepository)
    {
        $this->userRepository = $userRepository;
        $this->imageRepository = $imageRepository;
        $this->middleware('auth', ['except' => 'show']);
    }

    public function show($name)
    {
        $user = $this->userRepository->get($name);
        if ($user->avatar !== null)
            $avatar = $this->imageRepository->getImage($user->avatar);
        if ($user->profile_image !== null)
            $profile = $this->imageRepository->getImage($user->profile_image);

        return view('user.show', compact('user', 'avatar', 'profile'));
    }

    public function notifications()
    {
        $notifications = auth()->user()->unreadNotifications;
        return view('user.notifications', compact('notifications'));
    }

    public function readNotification($id)
    {
        if ($id == "all") {
            auth()->user()->unreadNotifications->markAsRead();
            return back()->with('success', 'Todas notificações marcadas como lida');
        } else {
            $notification = auth()->user()->unreadNotifications()->findOrFail($id);
            $notification->markAsRead();
            return back()->with('success', 'Notificação marcada como lida');
        }
    }

    public function update(Request $request)
    {
        $user = auth()->user();
        $this->checkPolicy('manager', $user);
        $this->validate($request, [
            'description' => 'max:66',
        ]);

        if ($this->userRepository->update($request, $user)) {
            return back()->with('success', 'Modificado com sucesso');
        }
        return back()->with('success', 'Modificação falhou');
    }


    public function uploadProfile(Request $request)
    {
        $user = auth()->user();

        $milliseconds = getMilliseconds();

        $key = 'user/' . $user->name . "/profile/$milliseconds." . $request->file('image')->guessClientExtension();

        if ($url = $this->uploadImageLocal($user, $request, $key, 2048, 'image', 'profile')) {
            $user->profile_image = $url;
        }
        if ($user->save()) {
            $this->userRepository->clearCache();
            return back()->with('success', 'Modificado com sucesso');
        }
        return back()->with('success', 'Modificação falhou');
    }

    public function uploadAvatar(Request $request)
    {
        $user = auth()->user();

        $milliseconds = getMilliseconds();

        $key = 'user/' . $user->name . "/avatar/$milliseconds." . $request->file('image')->guessClientExtension();

        if ($url = $this->uploadImageLocal($user, $request, $key)) {
            if (empty($user->avatar)) {
                $user->avatar = $url;

            } else {
                $user->avatar = $url;
                $user->update([
                    'avatar' => $user->avatar
                ]);
                $this->userRepository->clearCache();
                return back()->with('success', 'Modificado com sucesso');
            }
        }

        if ($user->save()) {
            $this->userRepository->clearCache();
            return back()->with('success', 'Modificado com sucesso');
        }

        return back()->with('success', 'Modificação falhou');
    }

    private function uploadImage(User $user, Request $request, $key, $max = 1024, $fileName = 'image')
    {
        $this->checkPolicy('manager', $user);
        $this->validate($request, [
            $fileName => 'required|image|mimes:jpeg,jpg,png|max:' . $max,
        ]);
        $image = $request->file($fileName);
        return $this->imageRepository->uploadImage($image, $key);
    }

    private function uploadImageLocal(User $user, Request $request, $key, $max = 1024, $fileName = 'image', $type = null)
    {
        $this->checkPolicy('manager', $user);
        $this->validate($request, [
            $fileName => 'required|image|mimes:jpeg,jpg,png|max:' . $max,
        ]);
        return $this->imageRepository->uploadImageToLocal($request, $type);
    }


}
