# friendlyCaptcha
friendlyCapthca MODX Extra


## Installation
Install the extra via MODX package manager

## Create Access Keys
Signup for an account on https://friendlycaptcha.com/ and create a secret and a sitekey.

## System settings
Add secret and sitekey to your system settings

## Setup Example
```
[[!FormIt?
   &hooks=`friendlyCaptcha`
   &validate=`name:required`
]]

<form action="[[~[[*id]]]]" method="post">
    <div>
        <label>Name: </label>
        <input type="text" name="name" value="[[!+fi.name]]">
        <span class="error">[[!+fi.error.name]]</span>
    </div>

    [[!friendlyCaptchaRenderer]]

    <button type="submit">send</button>
</form>
```

### Templating friendlyCaptcha
```
[[!friendlyCaptcha?
    &tpl=`yourCustomChunk`
]]
```

## Configuration and Styling
You can set the different settings inside your custom friendlyCaptcha chunk in the script section: https://docs.friendlycaptcha.com/#/
