<div>
    <h4> {{ auth()->user()->email }}</h4>
    <h4> {{ auth()->user()->id }}</h4>
    <h4> {{ auth()->user()->user_type }}</h4>
    <h4> {{ auth()->user()->cpf }}</h4>
    <h4> {{ auth()->user()->admin->nome }}</h4>
    <h4> {{ auth()->user()->admin->created_at }}</h4>


</div>
