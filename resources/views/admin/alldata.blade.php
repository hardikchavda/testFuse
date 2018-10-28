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
                                <td><a href="/admin/edit/{{$userData->id}}">Edit</a></td>
                                <td><a href="/admin/delete/{{$userData->id}}">Del</a></td>
                            </tr>
                            @empty
                            Nothing In List
                            @endforelse

                        </table>




                    </section>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
@include('layouts.footerAdmin')
