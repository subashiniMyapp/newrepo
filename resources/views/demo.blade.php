<!DOCTYPE html>
<style>
    body {
        height: 100vh;
        width: 100vw;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        background-color: #f38181;
        font-family: "montserrat", sans-serif;
        font-weight: 500;
        color: #fff;
    }

    h1 {
        padding-bottom: 30px;
        font-weight: 900;
        font-size: 35px;
    }

    .form {
        width: 30%;
        position: relative;
        height: 60px;
        overflow: hidden;
    }

    .form input {
        width: 100%;
        height: 100%;
        color: #fff;
        padding-top: 20px;
        border: none;
        background-color: #f38181;
    }

    .form label {
        position: absolute;
        bottom: 0px;
        left: 0px;
        width: 100%;
        height: 100%;
        pointer-events: none;
        border-bottom: 1px solid white;
    }

    .form label::after {
        content: "";
        position: absolute;
        bottom: -1px;
        left: 0px;
        width: 100%;
        height: 100%;
        border-bottom: 3px solid #fce38a;
        transform: translateX(-100%);
        transition: all 0.3s ease;
    }

    .content-name {
        position: absolute;
        bottom: 0px;
        left: 0px;
        padding-bottom: 5px;
        transition: all 0.3s ease;
    }

    .form input:focus {
        outline: none;
    }

    .form input:focus+.label-name .content-name,
    .form input:valid+.label-name .content-name {
        transform: translateY(-150%);
        font-size: 14px;
        left: 0px;
        color: #fce38a;
    }

    .form input:focus+.label-name::after,
    .form input:valid+.label-name::after {
        transform: translateX(0%);
    }
</style>
<h1>Input Animation</h1>
<div class="form">
    <input type="text" name="text" autocomplete="off" required />
    <label for="text" class="label-name">
        <span class="content-name">
            Your Text
        </span>
    </label>
</div>

</html>