<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateShoeRequest;
use App\Http\Requests\UpdateShoeRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\ShoeRepository;
use Illuminate\Http\Request;
use Flash;

class ShoeController extends AppBaseController
{
    /** @var ShoeRepository $shoeRepository*/
    private $shoeRepository;

    public function __construct(ShoeRepository $shoeRepo)
    {
        $this->shoeRepository = $shoeRepo;
    }

    /**
     * Display a listing of the Shoe.
     */
    public function index(Request $request)
    {
        $shoes = $this->shoeRepository->paginate(10);

        return view('shoes.index')
            ->with('shoes', $shoes);
    }

    /**
     * Show the form for creating a new Shoe.
     */
    public function create()
    {
        return view('shoes.create');
    }

    /**
     * Store a newly created Shoe in storage.
     */
    public function store(CreateShoeRequest $request)
    {
        $input = $request->all();

        $shoe = $this->shoeRepository->create($input);

        Flash::success('Shoe saved successfully.');

        return redirect(route('shoes.index'));
    }

    /**
     * Display the specified Shoe.
     */
    public function show($id)
    {
        $shoe = $this->shoeRepository->find($id);

        if (empty($shoe)) {
            Flash::error('Shoe not found');

            return redirect(route('shoes.index'));
        }

        return view('shoes.show')->with('shoe', $shoe);
    }

    /**
     * Show the form for editing the specified Shoe.
     */
    public function edit($id)
    {
        $shoe = $this->shoeRepository->find($id);

        if (empty($shoe)) {
            Flash::error('Shoe not found');

            return redirect(route('shoes.index'));
        }

        return view('shoes.edit')->with('shoe', $shoe);
    }

    /**
     * Update the specified Shoe in storage.
     */
    public function update($id, UpdateShoeRequest $request)
    {
        $shoe = $this->shoeRepository->find($id);

        if (empty($shoe)) {
            Flash::error('Shoe not found');

            return redirect(route('shoes.index'));
        }

        $shoe = $this->shoeRepository->update($request->all(), $id);

        Flash::success('Shoe updated successfully.');

        return redirect(route('shoes.index'));
    }

    /**
     * Remove the specified Shoe from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $shoe = $this->shoeRepository->find($id);

        if (empty($shoe)) {
            Flash::error('Shoe not found');

            return redirect(route('shoes.index'));
        }

        $this->shoeRepository->delete($id);

        Flash::success('Shoe deleted successfully.');

        return redirect(route('shoes.index'));
    }
}
