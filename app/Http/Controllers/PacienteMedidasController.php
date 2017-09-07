<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePacienteMedidasRequest;
use App\Http\Requests\UpdatePacienteMedidasRequest;
use App\Repositories\PacienteMedidasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PacienteMedidasController extends AppBaseController
{
    /** @var  PacienteMedidasRepository */
    private $pacienteMedidasRepository;

    public function __construct(PacienteMedidasRepository $pacienteMedidasRepo)
    {
        $this->pacienteMedidasRepository = $pacienteMedidasRepo;
    }

    /**
     * Display a listing of the PacienteMedidas.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->pacienteMedidasRepository->pushCriteria(new RequestCriteria($request));
        $pacienteMedidas = $this->pacienteMedidasRepository->all();

        return view('paciente_medidas.index')
            ->with('pacienteMedidas', $pacienteMedidas);
    }

    /**
     * Show the form for creating a new PacienteMedidas.
     *
     * @return Response
     */
    public function create()
    {
        return view('paciente_medidas.create');
    }

    /**
     * Store a newly created PacienteMedidas in storage.
     *
     * @param CreatePacienteMedidasRequest $request
     *
     * @return Response
     */
    public function store(CreatePacienteMedidasRequest $request)
    {
        $input = $request->all();

        $pacienteMedidas = $this->pacienteMedidasRepository->create($input);

        Flash::success('Paciente Medidas saved successfully.');

        return redirect(route('pacienteMedidas.index'));
    }

    /**
     * Display the specified PacienteMedidas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pacienteMedidas = $this->pacienteMedidasRepository->findWithoutFail($id);

        if (empty($pacienteMedidas)) {
            Flash::error('Paciente Medidas not found');

            return redirect(route('pacienteMedidas.index'));
        }

        return view('paciente_medidas.show')->with('pacienteMedidas', $pacienteMedidas);
    }

    /**
     * Show the form for editing the specified PacienteMedidas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pacienteMedidas = $this->pacienteMedidasRepository->findWithoutFail($id);

        if (empty($pacienteMedidas)) {
            Flash::error('Paciente Medidas not found');

            return redirect(route('pacienteMedidas.index'));
        }

        return view('paciente_medidas.edit')->with('pacienteMedidas', $pacienteMedidas);
    }

    /**
     * Update the specified PacienteMedidas in storage.
     *
     * @param  int              $id
     * @param UpdatePacienteMedidasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePacienteMedidasRequest $request)
    {
        $pacienteMedidas = $this->pacienteMedidasRepository->findWithoutFail($id);

        if (empty($pacienteMedidas)) {
            Flash::error('Paciente Medidas not found');

            return redirect(route('pacienteMedidas.index'));
        }

        $pacienteMedidas = $this->pacienteMedidasRepository->update($request->all(), $id);

        Flash::success('Paciente Medidas updated successfully.');

        return redirect(route('pacienteMedidas.index'));
    }

    /**
     * Remove the specified PacienteMedidas from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pacienteMedidas = $this->pacienteMedidasRepository->findWithoutFail($id);

        if (empty($pacienteMedidas)) {
            Flash::error('Paciente Medidas not found');

            return redirect(route('pacienteMedidas.index'));
        }

        $this->pacienteMedidasRepository->delete($id);

        Flash::success('Paciente Medidas deleted successfully.');

        return redirect(route('pacienteMedidas.index'));
    }
}
