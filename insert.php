<html>
<head>
  <meta charset="utf-8">
  <title> ... </title>
</head>
<body>
  <form method="get" action="index.php">
    <table align="center" width="500">
      <tr>
        <td colspan="2" align="center">
          <big> Profile </big>
        </td>
        <tr>
          <tr>
            <tr>
              <tr>
                <tr>
            <td> FirstName : </td>
            <td><input type="text" name="name1" size="20" value=""/></td>
          </tr>
          <td> Lastname : </td>
          <td><input type="text" name="name2" size="20" value=""/></td>
        </tr>
        <td> Sex : </td>
        <td>
          <input type="radio" name="operator" value="ชาย"> Male
          <input type="radio" name="operator" value="หญิง"> Female
        </td>
      </tr>
      <tr>
        <td> Birthdate : </td>
        <td>
          <input type="date" name="bday">
        </td>
      </tr>
        <td> Age : </td>
        <td>
          <input type="text" name="age" size="3" value=""/>
        </td>
      </tr>
      <td> Address : </td>
      <td>
        <textarea cols="40" rows="5" name="address"></textarea>
      </td>
    </tr>
    <td> Education : </td>
    <td>
      <select name="school">
        <option>
          <optgroup label="Primary School">
            <option> Grade 1
              <option> Grade 2
                <option> Grade 3
                  <option> Grade 4
                    <option> Grade 5
                      <option> Grade 6
            </optgroup>
            <optgroup label="High School">
              <optgroup label="Junior High School">
                <option> Grade 7
                  <option> Grade 8
                    <option> Grade 9
                      <optgroup label="Senior High School">
                        <option> Grade 10
                          <option> Grade 11
                            <option> Grade 12
                  </optgroup>
                </optgroup>
              </optgroup>
              <optgroup label="University">
                <option> B.A. (Bachelor of Arts)
                  <option> M.A. (Master of Arts)
                    <option> Ph.D. (Doctor of Philosophy)
              </optgroup>
              <optgroup label="Other">
              <option> Vocational Certificate
                <option> High Vocational Certificate
                  <option> Technical Certificate
                    <option> Non-Formal Education
                      <option> Technical College
                        <option> Polytechnic School
                        </optgroup>
      </select>
      <tr>
        <td> Academy : </td>
        <td>
          <input type="text" name="nameschool" size="50" value=""/>
        </td>
        </tr>
      <tr>
        <td> Hobby : </td>
        <td>
          <input type="text" name="hobby" size="20" value=""/>
        </td>
        </tr>
      <tr>
        <td> Phone : </td>
        <td>
          <input type="text" name="phone" size="10" value=""/>
        </td>
      </tr>
      <tr>
        <td> E-Mail : </td>
        <td>
          <input type="text" name="email" size="20" value=""/>
        </td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <input type="submit" value=" Submit "/>
          <input type="reset" value=" Clear "/>
        </td>
      </tr>
    </table>
  </form>
</body>
</html>
