<fieldset>
    @for ($i = 0; $i < $count($name); $i++)
        <div class="input-box">
            @foreach ($options as $option)

            @endforeach
        </div>
    @endfor
</fieldset>
