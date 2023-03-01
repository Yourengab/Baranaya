<?php 
header("Content-type: text/css");
?>

@import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap");

:root {
  --main: #1c1c1d;
  --second: #6b26fd;
  --border: #a9a9a9;
  --text-dimmed: #7e7e7e;
  --success: #5cd27d;
  --danger: #fd5e5e;
}

* {
  font-family: "Inter";
  box-sizing: border-box;
}

body {
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background: url(../asset/loginbg.png);
  background-position: center;
  background-size: cover;
}

.container {
    padding: 60px 50px;
    background-color: var(--main);
    width: 500px;
    border-radius: 20px;
    box-shadow: 0px 8px 24px rgba(78, 77, 77, 0.15);
}

.container .loginText {
    width: 100%;
    color: white;
}

.container .loginText p {
    color: var(--text-dimmed);
}

.container form .user, .container form .password {
    display: flex;
    flex-direction: column;
    margin-top: 50px;
    gap: 10px;
    color: white;
    font-size: 18px;
}

.container form .user p {
  color: var(--danger);
  font-size: 16px;
  font-weight: 500;
  font-style: italic;
}

.container form input {
    font-size: 16px;
    color: var(--text-dimmed);
    font-weight: 500;
    width: 100%;
    height: 45px;
    padding: 10px 20px;
    border-radius: 10px;
    border:1px solid var(--border);
    background: transparent;
}

.container form button {
    width: 100%;
    margin-top: 40px;
    height: 45px;
    border: none;
    background-color: var(--second);
    border-radius: 50px;
    font-size: 18px;
    color: white;
    cursor: pointer;
}