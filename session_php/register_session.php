<html>
<head>
<title>Register</title>
<style>
        * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
    color: #fbe0c3;
  }
  body {
    background-color: #fbe0c3;
  }
  .container {
    width: 90vw;
    max-width: 600px;
    padding: 2em 1.5em;
    background-color: #354749;
    margin: 1em auto;
    border-radius: 0.5em;
  }
  h4 {
    font-size: 1.5em;
  }
  .input-section {
    margin: 0.5em 0;
  }
  label,
  .error-message {
    display: block;
    font-size: 1em;
  }
  label {
    margin-bottom: 0.5em;
    font-weight: 500;
  }
  .error-message {
    margin-top: 0.2em;
  }
  input,
  button {
    display: block;
    outline: none;
    width: 100%;
    padding: 0.5em;
    border-radius: 0.3em;
  }
  input {
    padding: 1em 0.5em;
    border: 1.5px solid #d0d0d0;
  }
  input:hover,
  input:focus {
    background: rgb(187, 184, 166);
    outline: 0;

  }
  button {
  font-size: 1em;
  background-color: #7d8e95;
  border: none;
  color: #fbe0c3;
  padding: 0.8em 0;
  margin-top: 2em;
}
  
  button:hover {
    background: rgb(187, 184, 166);
    outline: 0;
  }
  
  .required-color {
    color: #ff4747;
  }
  .error {
    border-color: #ff4747;
  }
  .valid {
    border-color: #37a137;
  }
  .hide {
    display: none;
  }
  @media only screen and (max-width: 450px) {
    .container {
      font-size: 14px;
    }
  }

.selectbtn {
    color: hwb(36 24% 74%);
}
  </style>
</head>
<body>
    <?php 
    
    ?>
<form action="register_session_action.php" method="post">
<div class="container">
      <form autocomplete="off">
        <h4>REGISTER</h4>
        <br>
        <div class="input-section">
        <label>USERNAME <span class="required-color">*</span></label>
          <input
            type="text"
            name="user"
            placeholder="Enter Username"
            required
          />
          <br>
          <label>EMAIL <span class="required-color">*</span></label>
          <input
            type="text"
            name="email"
            placeholder="Enter Email"
            required
            />
            <br>
          <div class="input-section">
          <label>PASSWORD <span class="required-color">*</span></label>
          <input
            type="password"
            name="pass"
            placeholder="Enter Password"
            required
          />
          <br>
          <div class="input-section">
          <label> REPEAT PASSWORD <span class="required-color">*</span></label>
          <input
            type="password"
            name="pass"
            placeholder="Enter Password"
            required
          />
          <br>
          <div class="input-section">
          <label>ROLE <span class="required-color">*</span></label>
        </div>
        <select id="role" name="role">
        <option value="null">-----PILIH-----</option>
        <option value="admin">ADMIN</option>
        <option value="operator">OPERATOR</option>
        </select>
    <button input type="submit" name="submit" value="SUBMIT">SUBMIT</button> 
    <button input type="reset" name="reset" value="RESET">RESET</button>
   
</table>
</form>
</body>
</html>