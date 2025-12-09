<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;


class StudentsController extends Controller
{
    //
    public function index(): View{
        $url = env('URL_SERVER_API','http://127.0.0.1:8000/api');
        $response = Http::get($url.'/students');
        $data = $response->json();
        return view('students', compact('data'));
    }

    public function create(): View{
        return view('student');
    }

    public function store(Request $request):RedirectResponse{
        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api');
        $response = Http::post($url.'/students', data: [
            'name' => $request->name,
            'phone' => $request->phone,
            'language' => $request->language,
        ]);
        return redirect()->route('students.index');
    }

    public function destroy($id): RedirectResponse{
        $url = env('URL_SERVER_API','http://127.0.0.1:8000/api');
        $response = Http::delete( $url.'/students/'.$id);
        return redirect()->route('students.index');
    }

    public function view($id): View{
        $url = env('URL_SERVER_API','http://127.0.0.1:8000/api');
        $response = Http::get( $url.'/students/'.$id);
        $data = $response->json();
        return view(view: 'studentDetail', data: compact('data'));
    }

    public function update(Request $request): RedirectResponse{
        $url = env('URL_SERVER_API','http://127.0.0.1:8000/api');
        $response = Http::patch($url.'/students/'.$request->id, data: [
            'name' => $request->name,
            'phone' => $request->phone,
            'language' => $request->language,
        ]);
        return redirect()->route('students.index');
    }
}
