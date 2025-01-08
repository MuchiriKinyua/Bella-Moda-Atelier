<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateKidRequest;
use App\Http\Requests\UpdateKidRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\KidRepository;
use Illuminate\Http\Request;
use Flash;

class KidController extends AppBaseController
{
    /** @var KidRepository $kidRepository*/
    private $kidRepository;

    public function __construct(KidRepository $kidRepo)
    {
        $this->kidRepository = $kidRepo;
    }

    /**
     * Display a listing of the Kid.
     */
    public function index(Request $request)
    {
        $kids = $this->kidRepository->paginate(10);

        return view('kids.index')
            ->with('kids', $kids);
    }

    /**
     * Show the form for creating a new Kid.
     */
    public function create()
    {
        return view('kids.create');
    }

    /**
     * Store a newly created Kid in storage.
     */
    public function store(CreateKidRequest $request)
    {
        $input = $request->all();

        $kid = $this->kidRepository->create($input);

        Flash::success('Kid saved successfully.');

        return redirect(route('kids.index'));
    }

    /**
     * Display the specified Kid.
     */
    public function show($id)
    {
        $kid = $this->kidRepository->find($id);

        if (empty($kid)) {
            Flash::error('Kid not found');

            return redirect(route('kids.index'));
        }

        return view('kids.show')->with('kid', $kid);
    }

    /**
     * Show the form for editing the specified Kid.
     */
    public function edit($id)
    {
        $kid = $this->kidRepository->find($id);

        if (empty($kid)) {
            Flash::error('Kid not found');

            return redirect(route('kids.index'));
        }

        return view('kids.edit')->with('kid', $kid);
    }

    /**
     * Update the specified Kid in storage.
     */
    public function update($id, UpdateKidRequest $request)
    {
        $kid = $this->kidRepository->find($id);

        if (empty($kid)) {
            Flash::error('Kid not found');

            return redirect(route('kids.index'));
        }

        $kid = $this->kidRepository->update($request->all(), $id);

        Flash::success('Kid updated successfully.');

        return redirect(route('kids.index'));
    }

    /**
     * Remove the specified Kid from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $kid = $this->kidRepository->find($id);

        if (empty($kid)) {
            Flash::error('Kid not found');

            return redirect(route('kids.index'));
        }

        $this->kidRepository->delete($id);

        Flash::success('Kid deleted successfully.');

        return redirect(route('kids.index'));
    }
}
