<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBridalRequest;
use App\Http\Requests\UpdateBridalRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\BridalRepository;
use Illuminate\Http\Request;
use Flash;

class BridalController extends AppBaseController
{
    /** @var BridalRepository $bridalRepository*/
    private $bridalRepository;

    public function __construct(BridalRepository $bridalRepo)
    {
        $this->bridalRepository = $bridalRepo;
    }

    /**
     * Display a listing of the Bridal.
     */
    public function index(Request $request)
    {
        $bridals = $this->bridalRepository->paginate(10);

        return view('bridals.index')
            ->with('bridals', $bridals);
    }

    /**
     * Show the form for creating a new Bridal.
     */
    public function create()
    {
        return view('bridals.create');
    }

    /**
     * Store a newly created Bridal in storage.
     */
    public function store(CreateBridalRequest $request)
    {
        $input = $request->all();

        $bridal = $this->bridalRepository->create($input);

        Flash::success('Bridal saved successfully.');

        return redirect(route('bridals.index'));
    }

    /**
     * Display the specified Bridal.
     */
    public function show($id)
    {
        $bridal = $this->bridalRepository->find($id);

        if (empty($bridal)) {
            Flash::error('Bridal not found');

            return redirect(route('bridals.index'));
        }

        return view('bridals.show')->with('bridal', $bridal);
    }

    /**
     * Show the form for editing the specified Bridal.
     */
    public function edit($id)
    {
        $bridal = $this->bridalRepository->find($id);

        if (empty($bridal)) {
            Flash::error('Bridal not found');

            return redirect(route('bridals.index'));
        }

        return view('bridals.edit')->with('bridal', $bridal);
    }

    /**
     * Update the specified Bridal in storage.
     */
    public function update($id, UpdateBridalRequest $request)
    {
        $bridal = $this->bridalRepository->find($id);

        if (empty($bridal)) {
            Flash::error('Bridal not found');

            return redirect(route('bridals.index'));
        }

        $bridal = $this->bridalRepository->update($request->all(), $id);

        Flash::success('Bridal updated successfully.');

        return redirect(route('bridals.index'));
    }

    /**
     * Remove the specified Bridal from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $bridal = $this->bridalRepository->find($id);

        if (empty($bridal)) {
            Flash::error('Bridal not found');

            return redirect(route('bridals.index'));
        }

        $this->bridalRepository->delete($id);

        Flash::success('Bridal deleted successfully.');

        return redirect(route('bridals.index'));
    }
}
