<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJoueurRequest;
use App\Http\Requests\UpdateJoueurRequest;
use App\Models\Equipe;
use App\Repositories\JoueurRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\DB;
use Response;

class JoueurController extends AppBaseController
{
    /** @var  JoueurRepository */
    private $joueurRepository;

    public function __construct(JoueurRepository $joueurRepo)
    {
        $this->joueurRepository = $joueurRepo;
    }

    /**
     * Display a listing of the Joueur.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $joueurs = $this->joueurRepository->all();

        return view('joueurs.index')
            ->with('joueurs', $joueurs);
    }

    /**
     * Show the form for creating a new Joueur.
     *
     * @return Response
     */
    public function create()
    {
        $equipes = Equipe::pluck("name", "id")->all();
        return view('joueurs.create')->with(compact('equipes'));
    }

    /**
     * Store a newly created Joueur in storage.
     *
     * @param CreateJoueurRequest $request
     *
     * @return Response
     */
    public function store(CreateJoueurRequest $request)
    {
        $input = $request->all();

        $joueur = $this->joueurRepository->create($input);

        Flash::success('Joueur saved successfully.');

        return redirect(route('joueurs.index'));
    }

    /**
     * Display the specified Joueur.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $joueur = $this->joueurRepository->find($id);

        if (empty($joueur)) {
            Flash::error('Joueur not found');

            return redirect(route('joueurs.index'));
        }

        return view('joueurs.show')->with('joueur', $joueur);
    }

    /**
     * Show the form for editing the specified Joueur.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $joueur = $this->joueurRepository->find($id);

        if (empty($joueur)) {
            Flash::error('Joueur not found');

            return redirect(route('joueurs.index'));
        }

        return view('joueurs.edit')->with('joueur', $joueur);
    }

    /**
     * Update the specified Joueur in storage.
     *
     * @param int $id
     * @param UpdateJoueurRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJoueurRequest $request)
    {
        $joueur = $this->joueurRepository->find($id);

        if (empty($joueur)) {
            Flash::error('Joueur not found');

            return redirect(route('joueurs.index'));
        }

        $joueur = $this->joueurRepository->update($request->all(), $id);

        Flash::success('Joueur updated successfully.');

        return redirect(route('joueurs.index'));
    }

    /**
     * Remove the specified Joueur from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $joueur = $this->joueurRepository->find($id);

        if (empty($joueur)) {
            Flash::error('Joueur not found');

            return redirect(route('joueurs.index'));
        }

        $this->joueurRepository->delete($id);

        Flash::success('Joueur deleted successfully.');

        return redirect(route('joueurs.index'));
    }
}
