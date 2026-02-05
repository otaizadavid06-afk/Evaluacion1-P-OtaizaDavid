<h1>Lista de Pacientes</h1>

<table border="1">
    <thead>
        <tr>
            <th>Apodo</th>
            <th>Edad</th>
            <th>Peso</th>
            <th>UltimaCita</th>
        </tr>
    </thead>
    <tbody>

    @forelse($paciente as $p)
    <tr>
        <td>{{ $p->Apodo }}</td>

        <td>{{ $p->Edad }}</td>

        <td>{{ $p->Peso }}</td>

        <td>{{ $p->UltimaCita }}</td>
    </tr>
    @empty

    <tr>
        <td colspan="4">No hay registros</td>
    </tr>
    @endforelse
    </tbody>
</table>