<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Announcement;

class DashboardController extends Controller
{

    /**
     * Affiche la page du tableau de bord.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Récupère les messages de l'utilisateur connecté
        //$messages = Message::where('user_id', auth()->id())->get();

        // Récupère toutes les annonces
        //$announcements = Announcement::all();

        // Renvoie la vue du tableau de bord avec les données
        return view('Dashboard', compact('messages', 'announcements'));
    }
}

