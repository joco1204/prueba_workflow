        
            </content>
        </section>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
        <script type="text/javascript">
            $( document ).ready(function() {
                $('select').select2().css('width','100%');
            });
        </script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

        <script type="text/javascript" src="{{ asset('js/layout/script.js')}}"></script>

        <!-- scripts employee -->
        @if (\Request::is('trabajadores'))
            <script type="text/javascript" src="{{ asset('js/employee/script.js')}}"></script>
        @endif

        @if (\Request::is('nuevo-trabajador'))
            <script type="text/javascript" src="{{ asset('js/employee/new.js')}}"></script>
        @endif

        @if (\Request::is('ver-trabajador'))
            <script type="text/javascript" src="{{ asset('js/employee/view.js')}}"></script>
        @endif

        @if (\Request::is('editar-trabajador'))
            <script type="text/javascript" src="{{ asset('js/employee/edit.js')}}"></script>
        @endif

        <!-- scripts wo -->
        @if (\Request::is('ordenes-de-trabajo'))
            <script type="text/javascript" src="{{ asset('js/work_order/script.js')}}"></script>
        @endif

        @if (\Request::is('nueva-orden-de-trabajo'))
            <script type="text/javascript" src="{{ asset('js/work_order/new.js')}}"></script>
        @endif

        @if (\Request::is('ver-orden-de-trabajo'))
            <script type="text/javascript" src="{{ asset('js/work_order/view.js')}}"></script>
        @endif

        @if (\Request::is('editar-orden-de-trabajo'))
            <script type="text/javascript" src="{{ asset('js/work_order/edit.js')}}"></script>
        @endif
    </body>
</html>