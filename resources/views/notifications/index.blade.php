<x-fullapp-layout>

  <h1 class="text-center btn-new">Повідомлення</h1>
<div class="container">
  <div id="notificationGroup">
    <p>
      <button href="#" class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#unread" data-parent="#notificationGroup" aria-expanded="true" aria-controls="unread">
        Нові повідомлення
      </button>
      <button href="#" class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#read" data-parent="#notificationGroup" aria-expanded="true" aria-controls="read">
        Переглянуті повідомлення
      </button>
    </p>
      <div class="according-group mt-3">
        <div class="collapse show" id="unread" >
          @foreach ($notifications as $notification)
              @if(!$notification->read_at)
              <div class="container d-flex flex-column">
                <div class="alert alert-success row" role="alert">
                  <div class="col-10">
                    Користувач {{$notification->data['name']}} залишив запит на прихищення тварини
                    <a class="text-primary" href="animals/{{$notification->data['animal_id']}}"><i class="fa fa-paw"></i></a>.
                    Номер користувача - {{$notification->data['phone']}}. Пошта - {{$notification->data['email']}}.
                  </div>
                  <div class="col-md-2 d-flex align-items-center justify-content-end">
                    <button class="mark-as-read text-nowrap text-primary" data-id="{{ $notification->id }}" type="button">
                      Переглянуто <i class="fa fa-eye" aria-hidden="true"></i>
                    </button>
                  </div>
                </div>
              </div>
              @endif
            @endforeach
        </div>

        <div class="collapse" id="read" >
            @foreach ($notifications as $notification)
              @if($notification->read_at)
              <div class="container d-flex flex-column">
                <div class="alert alert-info row" role="alert">
                    <div class="col-10">
                      Користувач {{$notification->data['name']}} залишив запит на прихищення тварини
                      <a href="animals/{{$notification->data['animal_id']}}"><i class="fa fa-paw"></i></a>
                      Номер користувача - {{$notification->data['phone']}}. Пошта - {{$notification->data['email']}}.
                    </div>
                    <div class="col-sm-2 d-flex align-items-center justify-content-end">
                      <button class="delete-notification text-nowrap" data-id="{{ $notification->id }}" type="button">
                        Видалити<i class="fas fa-trash"></i>
                      </button>
                  </div>
                </div>
              </div>
              @endif
            @endforeach
            </div>
        </div>
  </div>
</div>

<x-slot name="scripts">
  <script>

      $('#notificationGroup').on('show.bs.collapse','.collapse', function() {
        $('#notificationGroup').find('.collapse.show').collapse('hide');
        });

    function sendMarkRequest(id = null) {
        return $.ajax("{{ route('notifications.mark') }}", {
            method: 'POST',
            data: {
              "_token": "{{ csrf_token() }}",
              "id": id
            }
        });
    }
    function deleteNotification(id = null) {
        return $.ajax("{{ route('notifications.delete') }}", {
            method: 'POST',
            data: {
              "_token": "{{ csrf_token() }}",
              "id": id
            }
        });
    }

    $(function() {
        $('.mark-as-read').click(function() {
            let request = sendMarkRequest($(this).data('id'));

            request.done(() => {
                $(this).parents('div.alert').removeClass('alert-success').addClass('alert-info');
            });
        });

        $('.delete-notification').click(function() {
             let request = deleteNotification($(this).data('id'));

            request.done(() => {
                $(this).parents('div.alert').remove();
            })
        });
    });
    </script>

  </x-slot>

</x-fullap-layout>
