@include('layouts.headerAdmin')

<div class="wrapper style3">
    <div class="inner">
        <div class="container">
            <div class="row">
                <div class="col-8 col-12-medium">

                    <!-- Article list -->
                    <section class="box article-list">
                        <h2 class="icon fa-file-text-o">UserData</h2>


                        <!-- Excerpt -->

                        <table >
                            <tr >
                                <td style="padding: 5px">FirstName</td>
                                <td style="padding: 5px">MiddleName</td>
                                <td style="padding: 5px">LastName</td>
                            </tr>
                            @forelse($data as $userData)
                            <tr>
                                <td style="padding: 5px; ">{{$userData->firstname}}</td>
                                <td style="padding: 5px">{{$userData->middlename}}</td>
                                <td style="padding: 5px">{{$userData->lastname}}</td>
                                <td><a href="/admin/{{$userData->id}}/edit">Edit</a></td>
                                <td><a href="/admin/{{$userData->id}}/delete">Del</a></td>
                            </tr>
                            @empty
                            Nothing In List
                            @endforelse

                        </table>
                        <button id="dialog-link" class="ui-button ui-corner-all ui-widget">
                            <span class="ui-icon ui-icon-newwin"></span>Open Dialog
                        </button>
                        <div id="dialog" title="Dialog Title">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <script>
                            $("#dialog").dialog({
                                autoOpen: false,
                                width: 400,
                                buttons: [
                                    {
                                        text: "Ok",
                                        click: function() {
                                            $(this).dialog("close");
                                        }
                                    },
                                    {
                                        text: "Cancel",
                                        click: function() {
                                            $(this).dialog("close");
                                        }
                                    }
                                ]
                            });

                            $("#dialog-link").click(function(event) {
                                $("#dialog").dialog("open");
                                event.preventDefault();
                            });

                        </script>

                    </section>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
@include('layouts.footerAdmin')
