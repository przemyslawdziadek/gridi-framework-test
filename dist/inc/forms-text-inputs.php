<h1>Form - Text Inputs</h1>
<fieldset>
    <legend>
        Legend - Text Fields:
    </legend>
    <div class="form-group">
        <label for="input-text">Input text</label>
        <input id="input-text" name="input-text" type="text" value="" placeholder="Input text" />
    </div>
    <div class="form-group">
        <label for="input-text-disabled">Input text disabled</label>
        <input id="input-text-disabled" name="input-text-disabled" type="text" value="" placeholder="Input text disabled" disabled="disabled" />
    </div>
    <div class="form-group">
        <label for="input-search">Input search</label>
        <input id="input-search" name="input-search" type="search" value="" placeholder="Input search" />
    </div>
    <div class="form-group">
        <label for="input-email">Input email</label>
        <input id="input-email" name="input-email" type="email" value="" placeholder="Input email" />
    </div>
    <div class="form-group">
        <label for="input-tel">Input tel</label>
        <input id="input-tel" name="input-tel" type="tel" value="" placeholder="Input tel" />
    </div>
    <div class="form-group">
        <label for="input-url">Input url</label>
        <input id="input-url" name="input-url" type="url" value="" placeholder="Input url" />
    </div>
    <div class="form-group">
        <label for="input-number">Input number</label>
        <input id="input-number" name="input-number" type="number" value="" placeholder="Input number" />
    </div>
    <div class="form-group">
        <label for="input-password">Input password</label>
        <input id="input-password" name="input-password" type="password" value="" placeholder="Input password" />
    </div>
    <div class="form-group">
        <label for="textarea">Textarea</label>
        <textarea id="textarea" name="textarea" placeholder=textarea></textarea>
    </div>
</fieldset>
<fieldset>
    <legend>
        Legend - Date and Times Fields:
    </legend>
    <div class="form-group">
        <label for="input-date">Input date</label>
        <input id="input-date" name="input-date" type="date" value="" placeholder="Input date" />
    </div>
    <div class="form-group">
        <label for="input-time">Input time</label>
        <input id="input-time" name="input-time" type="time" value="" placeholder="Input time" />
    </div>
    <div class="form-group">
        <label for="input-datetime">Input datetime</label>
        <input id="input-datetime" name="input-datetime" type="datetime" value="" placeholder="Input datetime" />
    </div>
    <div class="form-group">
        <label for="input-datetime-local">Input datetime-local</label>
        <input id="input-datetime-local" name="input-datetime-local" type="datetime-local" value="" placeholder="Input datetime-local" />
    </div>
    <div class="form-group">
        <label for="input-month">Input month</label>
        <input id="input-month" name="input-month" type="month" value="" placeholder="Input month" />
    </div>
    <div class="form-group">
        <label for="input-week">Input week</label>
        <input id="input-week" name="input-week" type="week" value="" placeholder="Input week" />
    </div>
</fieldset>
<fieldset>
    <legend>
        Legend - Color Fields:
    </legend>
    <div class="form-group">
        <label for="color">Color</label>
        <input id="color" name="color" type="color" />
    </div>
</fieldset>
<fieldset>
    <legend>
        Legend - Text Fields Datalists:
    </legend>
    <div class="form-group">
        <input type="text" list="data-list">
        <datalist id="data-list">
            <option value="Option 1"></option>
            <option value="Option 2"></option>
            <option value="Option 3"></option>
            <option value="Option 4"></option>
            <option value="Option 5"></option>
        </datalist>
    </div>
</fieldset>
