<?hh
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<9fc9c2a7121f0efa8759ea3ec088d6aa>>
 */
namespace Facebook\HHAST;
use type Facebook\TypeAssert\TypeAssert;

final class DarrayTypeSpecifier extends EditableSyntax {

  private EditableSyntax $_keyword;
  private EditableSyntax $_left_angle;
  private EditableSyntax $_key;
  private EditableSyntax $_comma;
  private EditableSyntax $_value;
  private EditableSyntax $_trailing_comma;
  private EditableSyntax $_right_angle;

  public function __construct(
    EditableSyntax $keyword,
    EditableSyntax $left_angle,
    EditableSyntax $key,
    EditableSyntax $comma,
    EditableSyntax $value,
    EditableSyntax $trailing_comma,
    EditableSyntax $right_angle,
  ) {
    parent::__construct('darray_type_specifier');
    $this->_keyword = $keyword;
    $this->_left_angle = $left_angle;
    $this->_key = $key;
    $this->_comma = $comma;
    $this->_value = $value;
    $this->_trailing_comma = $trailing_comma;
    $this->_right_angle = $right_angle;
  }

  <<__Override>>
  public static function from_json(
    array<string, mixed> $json,
    int $position,
    string $source,
  ): this {
    $keyword = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['darray_keyword'],
      $position,
      $source,
    );
    $position += $keyword->width();
    $left_angle = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['darray_left_angle'],
      $position,
      $source,
    );
    $position += $left_angle->width();
    $key = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['darray_key'],
      $position,
      $source,
    );
    $position += $key->width();
    $comma = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['darray_comma'],
      $position,
      $source,
    );
    $position += $comma->width();
    $value = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['darray_value'],
      $position,
      $source,
    );
    $position += $value->width();
    $trailing_comma = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['darray_trailing_comma'],
      $position,
      $source,
    );
    $position += $trailing_comma->width();
    $right_angle = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['darray_right_angle'],
      $position,
      $source,
    );
    $position += $right_angle->width();
    return new self(
      $keyword,
      $left_angle,
      $key,
      $comma,
      $value,
      $trailing_comma,
      $right_angle,
    );
  }

  <<__Override>>
  public function children(): KeyedTraversable<string, EditableSyntax> {
    yield 'keyword' => $this->_keyword;
    yield 'left_angle' => $this->_left_angle;
    yield 'key' => $this->_key;
    yield 'comma' => $this->_comma;
    yield 'value' => $this->_value;
    yield 'trailing_comma' => $this->_trailing_comma;
    yield 'right_angle' => $this->_right_angle;
  }

  <<__Override>>
  public function rewrite_children(
    self::TRewriter $rewriter,
    ?Traversable<EditableSyntax> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $keyword = $this->_keyword->rewrite($rewriter, $parents);
    $left_angle = $this->_left_angle->rewrite($rewriter, $parents);
    $key = $this->_key->rewrite($rewriter, $parents);
    $comma = $this->_comma->rewrite($rewriter, $parents);
    $value = $this->_value->rewrite($rewriter, $parents);
    $trailing_comma = $this->_trailing_comma->rewrite($rewriter, $parents);
    $right_angle = $this->_right_angle->rewrite($rewriter, $parents);
    if (
      $keyword === $this->_keyword &&
      $left_angle === $this->_left_angle &&
      $key === $this->_key &&
      $comma === $this->_comma &&
      $value === $this->_value &&
      $trailing_comma === $this->_trailing_comma &&
      $right_angle === $this->_right_angle
    ) {
      return $this;
    }
    return new self(
      $keyword,
      $left_angle,
      $key,
      $comma,
      $value,
      $trailing_comma,
      $right_angle,
    );
  }

  public function getKeywordUNTYPED(): EditableSyntax {
    return $this->_keyword;
  }

  public function withKeyword(EditableSyntax $value): this {
    if ($value === $this->_keyword) {
      return $this;
    }
    return new self(
      $value,
      $this->_left_angle,
      $this->_key,
      $this->_comma,
      $this->_value,
      $this->_trailing_comma,
      $this->_right_angle,
    );
  }

  public function hasKeyword(): bool {
    return !$this->_keyword->is_missing();
  }

  public function getKeyword(): DarrayToken {
    return TypeAssert::isInstanceOf(DarrayToken::class, $this->_keyword);
  }

  public function getLeftAngleUNTYPED(): EditableSyntax {
    return $this->_left_angle;
  }

  public function withLeftAngle(EditableSyntax $value): this {
    if ($value === $this->_left_angle) {
      return $this;
    }
    return new self(
      $this->_keyword,
      $value,
      $this->_key,
      $this->_comma,
      $this->_value,
      $this->_trailing_comma,
      $this->_right_angle,
    );
  }

  public function hasLeftAngle(): bool {
    return !$this->_left_angle->is_missing();
  }

  public function getLeftAngle(): LessThanToken {
    return TypeAssert::isInstanceOf(LessThanToken::class, $this->_left_angle);
  }

  public function getKeyUNTYPED(): EditableSyntax {
    return $this->_key;
  }

  public function withKey(EditableSyntax $value): this {
    if ($value === $this->_key) {
      return $this;
    }
    return new self(
      $this->_keyword,
      $this->_left_angle,
      $value,
      $this->_comma,
      $this->_value,
      $this->_trailing_comma,
      $this->_right_angle,
    );
  }

  public function hasKey(): bool {
    return !$this->_key->is_missing();
  }

  public function getKey(): SimpleTypeSpecifier {
    return TypeAssert::isInstanceOf(SimpleTypeSpecifier::class, $this->_key);
  }

  public function getCommaUNTYPED(): EditableSyntax {
    return $this->_comma;
  }

  public function withComma(EditableSyntax $value): this {
    if ($value === $this->_comma) {
      return $this;
    }
    return new self(
      $this->_keyword,
      $this->_left_angle,
      $this->_key,
      $value,
      $this->_value,
      $this->_trailing_comma,
      $this->_right_angle,
    );
  }

  public function hasComma(): bool {
    return !$this->_comma->is_missing();
  }

  public function getComma(): CommaToken {
    return TypeAssert::isInstanceOf(CommaToken::class, $this->_comma);
  }

  public function getValueUNTYPED(): EditableSyntax {
    return $this->_value;
  }

  public function withValue(EditableSyntax $value): this {
    if ($value === $this->_value) {
      return $this;
    }
    return new self(
      $this->_keyword,
      $this->_left_angle,
      $this->_key,
      $this->_comma,
      $value,
      $this->_trailing_comma,
      $this->_right_angle,
    );
  }

  public function hasValue(): bool {
    return !$this->_value->is_missing();
  }

  public function getValue(): SimpleTypeSpecifier {
    return TypeAssert::isInstanceOf(SimpleTypeSpecifier::class, $this->_value);
  }

  public function getTrailingCommaUNTYPED(): EditableSyntax {
    return $this->_trailing_comma;
  }

  public function withTrailingComma(EditableSyntax $value): this {
    if ($value === $this->_trailing_comma) {
      return $this;
    }
    return new self(
      $this->_keyword,
      $this->_left_angle,
      $this->_key,
      $this->_comma,
      $this->_value,
      $value,
      $this->_right_angle,
    );
  }

  public function hasTrailingComma(): bool {
    return !$this->_trailing_comma->is_missing();
  }

  public function getTrailingComma(): EditableSyntax {
    return TypeAssert::isInstanceOf(EditableSyntax::class, $this->_trailing_comma);
  }

  public function getRightAngleUNTYPED(): EditableSyntax {
    return $this->_right_angle;
  }

  public function withRightAngle(EditableSyntax $value): this {
    if ($value === $this->_right_angle) {
      return $this;
    }
    return new self(
      $this->_keyword,
      $this->_left_angle,
      $this->_key,
      $this->_comma,
      $this->_value,
      $this->_trailing_comma,
      $value,
    );
  }

  public function hasRightAngle(): bool {
    return !$this->_right_angle->is_missing();
  }

  public function getRightAngle(): GreaterThanToken {
    return TypeAssert::isInstanceOf(GreaterThanToken::class, $this->_right_angle);
  }
}
