<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->

    <h2>Add new user</h2>

    <form action="addUser" method="post">
        @csrf
    <div class="input-form">
        <input type="text" placeholder="enter username" name="username" id="">
    </div>
    <div class="input-form">
        <input type="text" placeholder="enter city" name="city" id="">
    </div>
    <div class="input-form">
        <input type="text" placeholder="enter email" name="email" id="">
    </div>
    <div class="input-form">
        <button>Add New User</button>
    </div>
    </form>
</div>

<style>
    input{
        color: orange;
        border: 1px solid orange;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        margin: 10px;
    }
    button{
        color: black;
        border: 1px solid black;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        margin: 10px;
        background-color: white;
        cursor: pointer;
    }
</style>
