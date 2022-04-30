<?php

namespace app\core\form;

use app\core\Model;

class Field
{
    public Model $model;
    public string $attribute;
    public string $type;

    public const TYPE_TEXT = 'text';
    public const TYPE_NUMBER = 'number';
    public const TYPE_EMAIL = 'email';
    public const TYPE_PASSWORD = 'password';
    public const TYPE_DATE = 'date';

    public function __construct(Model $model, string $attribute)
    {
        $this->type = self::TYPE_TEXT;
        $this->model = $model;
        $this->attribute = $attribute;
    }

    public function __toString()
    {
        return sprintf(
            '
                    <label  class="col-sm-2 col-form-label">%s</label>
                        <div class="col-sm-10">
                            <input type="%s"  name="%s" value="%s" class="form-control %s">
                            <div class="invalid-feedback">
                                %s
                                </div>
                        </div>
        ',
            $this->model->getLabel($this->attribute),
            $this->type,
            $this->attribute,
            $this->model->{$this->attribute},
            $this->model->hasError($this->attribute) ? 'is-invalid'  : '',
            $this->model->getFirstError($this->attribute)
        );
    }

    public function passwordField()
    {
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }

    public function emailField()
    {
        $this->type = self::TYPE_EMAIL;
        return $this;
    }

    public function numberField()
    {
        $this->type = self::TYPE_NUMBER;
        return $this;
    }

    public function dateField()
    {
        $this->type = self::TYPE_DATE;
        return $this;
    }
}