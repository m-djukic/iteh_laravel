
<div class="card mb-3">
    <img src="https://www.icesco.org/en/wp-content/uploads/sites/2/2019/10/Education-areaOfCompetencies.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">List of students</h5>
        <p class="card-text">Here you can find all the informatins about students in the system</p>

        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">Index number</th>
                <th scope="col">First name</th>
                <th scope="col">Last name</th>
                <th scope="col">Age</th>
                <th scope="col">Speciality</th>
                <th scope="col">Operations</th>

            </tr>
            </thead>
            <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student -> indexNumber }}</td>
                    <td>{{ $student -> firstName }}</td>
                    <td>{{ $student -> lastName }}</td>
                    <td>{{ $student -> age }}</td>
                    <td>{{ $student -> speciality }}</td>

                    <td>
                        <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>





