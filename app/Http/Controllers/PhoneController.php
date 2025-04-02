<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function store(Request $request, User $user)
    {
        $validated = $request->validate([
            'number' => 'required|string',
            'type' => 'required|in:mobile,home,work'
        ]);

        $user->phones()->create($validated);

        return redirect()->back()->with('success', 'Telefone adicionado com sucesso!');
    }

    public function destroy(Phone $phone)
    {
        $phone->delete();

        return redirect()->back()->with('success', 'Telefone excluído com sucesso!');
    }
} 