<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWearRequest;
use App\Http\Requests\UpdateWearRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\WearRepository;
use Illuminate\Http\Request;
use Flash;

class WearController extends AppBaseController
{
    /** @var WearRepository $wearRepository*/
    private $wearRepository;

    public function __construct(WearRepository $wearRepo)
    {
        $this->wearRepository = $wearRepo;
    }

    /**
     * Display a listing of the Wear.
     */
    public function index(Request $request)
    {
        $wears = $this->wearRepository->paginate(10);

        return view('wears.index')
            ->with('wears', $wears);
    }

    /**
     * Show the form for creating a new Wear.
     */
    public function create()
    {
        return view('wears.create');
    }

    /**
     * Store a newly created Wear in storage.
     */
    public function store(CreateWearRequest $request)
    {
        $input = $request->all();

        $wear = $this->wearRepository->create($input);

        Flash::success('Wear saved successfully.');

        return redirect(route('wears.index'));
    }

    /**
     * Display the specified Wear.
     */
    public function show($id)
    {
        $wear = $this->wearRepository->find($id);

        if (empty($wear)) {
            Flash::error('Wear not found');

            return redirect(route('wears.index'));
        }

        return view('wears.show')->with('wear', $wear);
    }

    /**
     * Show the form for editing the specified Wear.
     */
    public function edit($id)
    {
        $wear = $this->wearRepository->find($id);

        if (empty($wear)) {
            Flash::error('Wear not found');

            return redirect(route('wears.index'));
        }

        return view('wears.edit')->with('wear', $wear);
    }

    /**
     * Update the specified Wear in storage.
     */
    public function update($id, UpdateWearRequest $request)
    {
        $wear = $this->wearRepository->find($id);

        if (empty($wear)) {
            Flash::error('Wear not found');

            return redirect(route('wears.index'));
        }

        $wear = $this->wearRepository->update($request->all(), $id);

        Flash::success('Wear updated successfully.');

        return redirect(route('wears.index'));
    }

    /**
     * Remove the specified Wear from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $wear = $this->wearRepository->find($id);

        if (empty($wear)) {
            Flash::error('Wear not found');

            return redirect(route('wears.index'));
        }

        $this->wearRepository->delete($id);

        Flash::success('Wear deleted successfully.');

        return redirect(route('wears.index'));
    }
}
