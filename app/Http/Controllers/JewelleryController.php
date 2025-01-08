<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJewelleryRequest;
use App\Http\Requests\UpdateJewelleryRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\JewelleryRepository;
use Illuminate\Http\Request;
use Flash;

class JewelleryController extends AppBaseController
{
    /** @var JewelleryRepository $jewelleryRepository*/
    private $jewelleryRepository;

    public function __construct(JewelleryRepository $jewelleryRepo)
    {
        $this->jewelleryRepository = $jewelleryRepo;
    }

    /**
     * Display a listing of the Jewellery.
     */
    public function index(Request $request)
    {
        $jewelleries = $this->jewelleryRepository->paginate(10);

        return view('jewelleries.index')
            ->with('jewelleries', $jewelleries);
    }

    /**
     * Show the form for creating a new Jewellery.
     */
    public function create()
    {
        return view('jewelleries.create');
    }

    /**
     * Store a newly created Jewellery in storage.
     */
    public function store(CreateJewelleryRequest $request)
    {
        $input = $request->all();

        $jewellery = $this->jewelleryRepository->create($input);

        Flash::success('Jewellery saved successfully.');

        return redirect(route('jewelleries.index'));
    }

    /**
     * Display the specified Jewellery.
     */
    public function show($id)
    {
        $jewellery = $this->jewelleryRepository->find($id);

        if (empty($jewellery)) {
            Flash::error('Jewellery not found');

            return redirect(route('jewelleries.index'));
        }

        return view('jewelleries.show')->with('jewellery', $jewellery);
    }

    /**
     * Show the form for editing the specified Jewellery.
     */
    public function edit($id)
    {
        $jewellery = $this->jewelleryRepository->find($id);

        if (empty($jewellery)) {
            Flash::error('Jewellery not found');

            return redirect(route('jewelleries.index'));
        }

        return view('jewelleries.edit')->with('jewellery', $jewellery);
    }

    /**
     * Update the specified Jewellery in storage.
     */
    public function update($id, UpdateJewelleryRequest $request)
    {
        $jewellery = $this->jewelleryRepository->find($id);

        if (empty($jewellery)) {
            Flash::error('Jewellery not found');

            return redirect(route('jewelleries.index'));
        }

        $jewellery = $this->jewelleryRepository->update($request->all(), $id);

        Flash::success('Jewellery updated successfully.');

        return redirect(route('jewelleries.index'));
    }

    /**
     * Remove the specified Jewellery from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $jewellery = $this->jewelleryRepository->find($id);

        if (empty($jewellery)) {
            Flash::error('Jewellery not found');

            return redirect(route('jewelleries.index'));
        }

        $this->jewelleryRepository->delete($id);

        Flash::success('Jewellery deleted successfully.');

        return redirect(route('jewelleries.index'));
    }
}
