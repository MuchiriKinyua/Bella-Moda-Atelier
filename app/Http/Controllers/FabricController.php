<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFabricRequest;
use App\Http\Requests\UpdateFabricRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\FabricRepository;
use Illuminate\Http\Request;
use Flash;

class FabricController extends AppBaseController
{
    /** @var FabricRepository $fabricRepository*/
    private $fabricRepository;

    public function __construct(FabricRepository $fabricRepo)
    {
        $this->fabricRepository = $fabricRepo;
    }

    /**
     * Display a listing of the Fabric.
     */
    public function index(Request $request)
    {
        $fabrics = $this->fabricRepository->paginate(10);

        return view('fabrics.index')
            ->with('fabrics', $fabrics);
    }

    /**
     * Show the form for creating a new Fabric.
     */
    public function create()
    {
        return view('fabrics.create');
    }

    /**
     * Store a newly created Fabric in storage.
     */
    public function store(CreateFabricRequest $request)
    {
        $input = $request->all();

        $fabric = $this->fabricRepository->create($input);

        Flash::success('Fabric saved successfully.');

        return redirect(route('fabrics.index'));
    }

    /**
     * Display the specified Fabric.
     */
    public function show($id)
    {
        $fabric = $this->fabricRepository->find($id);

        if (empty($fabric)) {
            Flash::error('Fabric not found');

            return redirect(route('fabrics.index'));
        }

        return view('fabrics.show')->with('fabric', $fabric);
    }

    /**
     * Show the form for editing the specified Fabric.
     */
    public function edit($id)
    {
        $fabric = $this->fabricRepository->find($id);

        if (empty($fabric)) {
            Flash::error('Fabric not found');

            return redirect(route('fabrics.index'));
        }

        return view('fabrics.edit')->with('fabric', $fabric);
    }

    /**
     * Update the specified Fabric in storage.
     */
    public function update($id, UpdateFabricRequest $request)
    {
        $fabric = $this->fabricRepository->find($id);

        if (empty($fabric)) {
            Flash::error('Fabric not found');

            return redirect(route('fabrics.index'));
        }

        $fabric = $this->fabricRepository->update($request->all(), $id);

        Flash::success('Fabric updated successfully.');

        return redirect(route('fabrics.index'));
    }

    /**
     * Remove the specified Fabric from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $fabric = $this->fabricRepository->find($id);

        if (empty($fabric)) {
            Flash::error('Fabric not found');

            return redirect(route('fabrics.index'));
        }

        $this->fabricRepository->delete($id);

        Flash::success('Fabric deleted successfully.');

        return redirect(route('fabrics.index'));
    }
}
