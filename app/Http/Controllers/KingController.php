<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateKingRequest;
use App\Http\Requests\UpdateKingRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\KingRepository;
use Illuminate\Http\Request;
use Flash;

class KingController extends AppBaseController
{
    /** @var KingRepository $kingRepository*/
    private $kingRepository;

    public function __construct(KingRepository $kingRepo)
    {
        $this->kingRepository = $kingRepo;
    }

    /**
     * Display a listing of the King.
     */
    public function index(Request $request)
    {
        $kings = $this->kingRepository->paginate(10);

        return view('kings.index')
            ->with('kings', $kings);
    }

    /**
     * Show the form for creating a new King.
     */
    public function create()
    {
        return view('kings.create');
    }

    /**
     * Store a newly created King in storage.
     */
    public function store(CreateKingRequest $request)
    {
        $input = $request->all();

        $king = $this->kingRepository->create($input);

        Flash::success('King saved successfully.');

        return redirect(route('kings.index'));
    }

    /**
     * Display the specified King.
     */
    public function show($id)
    {
        $king = $this->kingRepository->find($id);

        if (empty($king)) {
            Flash::error('King not found');

            return redirect(route('kings.index'));
        }

        return view('kings.show')->with('king', $king);
    }

    /**
     * Show the form for editing the specified King.
     */
    public function edit($id)
    {
        $king = $this->kingRepository->find($id);

        if (empty($king)) {
            Flash::error('King not found');

            return redirect(route('kings.index'));
        }

        return view('kings.edit')->with('king', $king);
    }

    /**
     * Update the specified King in storage.
     */
    public function update($id, UpdateKingRequest $request)
    {
        $king = $this->kingRepository->find($id);

        if (empty($king)) {
            Flash::error('King not found');

            return redirect(route('kings.index'));
        }

        $king = $this->kingRepository->update($request->all(), $id);

        Flash::success('King updated successfully.');

        return redirect(route('kings.index'));
    }

    /**
     * Remove the specified King from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $king = $this->kingRepository->find($id);

        if (empty($king)) {
            Flash::error('King not found');

            return redirect(route('kings.index'));
        }

        $this->kingRepository->delete($id);

        Flash::success('King deleted successfully.');

        return redirect(route('kings.index'));
    }
}
