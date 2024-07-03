
@foreach ($forms as $form)

<tr id="form-{{ $form->id }}">
    <td>{{ $form->id }}</td>
    <td>{{ $form->first_name }}</td>
    <td>{{ $form->last_name }}</td>
    <td>{{ $form->email }}</td>
    <td>{{ $form->contact_number }}</td>
    <td>

    <button type="button" class="edit-button btn btn-primary"
                            data-id="{{ $form->id }}"
                            data-first_name="{{ $form->first_name }}"
                            data-last_name="{{ $form->last_name }}"
                            data-email="{{ $form->email }}"
                            data-contact_number="{{ $form->contact_number }}"
                            data-bs-toggle="modal" data-bs-target="#editModal">
                        Edit
                    </button>

            <button type="submit" onclick="deleteData({{$form->id}})">Delete</button>
    </td>
</tr>

@endforeach
