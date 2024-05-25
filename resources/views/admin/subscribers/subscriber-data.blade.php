  <div class="table-responsive text-nowrap">
      <input type="text" class="form-control mb-3 w-25 " placeholder="Search..." aria-label="Search..."
          aria-describedby="basic-addon-search31" wire:model.live='search'>
      @if (session('message'))
          <div class="alert alert-success my-success-alert">
              {{ session('message') }}
          </div>
      @endif
      @if (count($data) > 0)
          <table class="table table-dark">
              <thead>
                  <tr>
                      <th width="90%">Subscriber</th>

                      <th>Actions</th>
                  </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                  @foreach ($data as $record)
                      <tr>
                          <td><strong>
                                  {{ $record->email }}</strong></td>


                          <td>
                              <div class="dropdown">
                                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                      data-bs-toggle="dropdown">
                                      <i class="bx bx-dots-vertical-rounded"></i>
                                  </button>
                                  <div class="dropdown-menu">

                                      <a class="dropdown-item" href="#"
                                          wire:click.prevent="$dispatch('DeleteSubscriber',{ id: {{ $record->id }} })"><i
                                              class="bx bx-trash me-1"></i>
                                          Delete</a>

                                  </div>
                              </div>
                          </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
          <div class="mt-3">{{ $data->links() }}</div>
      @else
          <span class="text-danger">No Data Found</span>
      @endif

  </div>
