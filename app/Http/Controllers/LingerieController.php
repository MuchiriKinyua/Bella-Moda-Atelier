<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLingerieRequest;
use App\Http\Requests\UpdateLingerieRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\LingerieRepository;
use Illuminate\Http\Request;
use Flash;

class LingerieController extends AppBaseController
{
    /** @var LingerieRepository $lingerieRepository*/
    private $lingerieRepository;

    public function __construct(LingerieRepository $lingerieRepo)
    {
        $this->lingerieRepository = $lingerieRepo;
    }

    /**
     * Display a listing of the Lingerie.
     */
    public function index(Request $request)
    {
        $lingeries = $this->lingerieRepository->paginate(10);

        return view('lingeries.index')
            ->with('lingeries', $lingeries);
    }

    /**
     * Show the form for creating a new Lingerie.
     */
    public function create()
    {
        return view('lingeries.create');
    }

    /**
     * Store a newly created Lingerie in storage.
     */
    public function store(CreateLingerieRequest $request)
    {
        $input = $request->all();

        $lingerie = $this->lingerieRepository->create($input);

        Flash::success('Lingerie saved successfully.');

        return redirect(route('lingeries.index'));
    }

    /**
     * Display the specified Lingerie.
     */
    public function show($id)
    {
        $lingerie = $this->lingerieRepository->find($id);

        if (empty($lingerie)) {
            Flash::error('Lingerie not found');

            return redirect(route('lingeries.index'));
        }

        return view('lingeries.show')->with('lingerie', $lingerie);
    }

    /**
     * Show the form for editing the specified Lingerie.
     */
    public function edit($id)
    {
        $lingerie = $this->lingerieRepository->find($id);

        if (empty($lingerie)) {
            Flash::error('Lingerie not found');

            return redirect(route('lingeries.index'));
        }

        return view('lingeries.edit')->with('lingerie', $lingerie);
    }

    /**
     * Update the specified Lingerie in storage.
     */
    public function update($id, UpdateLingerieRequest $request)
    {
        $lingerie = $this->lingerieRepository->find($id);

        if (empty($lingerie)) {
            Flash::error('Lingerie not found');

            return redirect(route('lingeries.index'));
        }

        $lingerie = $this->lingerieRepository->update($request->all(), $id);

        Flash::success('Lingerie updated successfully.');

        return redirect(route('lingeries.index'));
    }

    /**
     * Remove the specified Lingerie from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $lingerie = $this->lingerieRepository->find($id);

        if (empty($lingerie)) {
            Flash::error('Lingerie not found');

            return redirect(route('lingeries.index'));
        }

        $this->lingerieRepository->delete($id);

        Flash::success('Lingerie deleted successfully.');

        return redirect(route('lingeries.index'));
    }
}
