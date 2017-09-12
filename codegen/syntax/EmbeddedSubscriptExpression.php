<?hh
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<e932cea3e4ef6ae18e5643fec4eaaf56>>
 */
namespace Facebook\HHAST;
use type Facebook\TypeAssert\TypeAssert;

final class EmbeddedSubscriptExpression extends EditableSyntax {

  private EditableSyntax $_receiver;
  private EditableSyntax $_left_bracket;
  private EditableSyntax $_index;
  private EditableSyntax $_right_bracket;

  public function __construct(
    EditableSyntax $receiver,
    EditableSyntax $left_bracket,
    EditableSyntax $index,
    EditableSyntax $right_bracket,
  ) {
    parent::__construct('embedded_subscript_expression');
    $this->_receiver = $receiver;
    $this->_left_bracket = $left_bracket;
    $this->_index = $index;
    $this->_right_bracket = $right_bracket;
  }

  <<__Override>>
  public static function from_json(
    array<string, mixed> $json,
    int $position,
    string $source,
  ): this {
    $receiver = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['embedded_subscript_receiver'],
      $position,
      $source,
    );
    $position += $receiver->width();
    $left_bracket = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['embedded_subscript_left_bracket'],
      $position,
      $source,
    );
    $position += $left_bracket->width();
    $index = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['embedded_subscript_index'],
      $position,
      $source,
    );
    $position += $index->width();
    $right_bracket = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['embedded_subscript_right_bracket'],
      $position,
      $source,
    );
    $position += $right_bracket->width();
    return new self($receiver, $left_bracket, $index, $right_bracket);
  }

  <<__Override>>
  public function children(): KeyedTraversable<string, EditableSyntax> {
    yield 'receiver' => $this->_receiver;
    yield 'left_bracket' => $this->_left_bracket;
    yield 'index' => $this->_index;
    yield 'right_bracket' => $this->_right_bracket;
  }

  <<__Override>>
  public function rewrite_children(
    self::TRewriter $rewriter,
    ?Traversable<EditableSyntax> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $receiver = $this->_receiver->rewrite($rewriter, $parents);
    $left_bracket = $this->_left_bracket->rewrite($rewriter, $parents);
    $index = $this->_index->rewrite($rewriter, $parents);
    $right_bracket = $this->_right_bracket->rewrite($rewriter, $parents);
    if (
      $receiver === $this->_receiver &&
      $left_bracket === $this->_left_bracket &&
      $index === $this->_index &&
      $right_bracket === $this->_right_bracket
    ) {
      return $this;
    }
    return new self($receiver, $left_bracket, $index, $right_bracket);
  }

  public function getReceiverUNTYPED(): EditableSyntax {
    return $this->_receiver;
  }

  public function withReceiver(EditableSyntax $value): this {
    if ($value === $this->_receiver) {
      return $this;
    }
    return new self($value, $this->_left_bracket, $this->_index, $this->_right_bracket);
  }

  public function hasReceiver(): bool {
    return !$this->_receiver->is_missing();
  }

  public function getReceiver(): EditableSyntax {
    return TypeAssert::isInstanceOf(EditableSyntax::class, $this->_receiver);
  }

  public function getLeftBracketUNTYPED(): EditableSyntax {
    return $this->_left_bracket;
  }

  public function withLeftBracket(EditableSyntax $value): this {
    if ($value === $this->_left_bracket) {
      return $this;
    }
    return new self($this->_receiver, $value, $this->_index, $this->_right_bracket);
  }

  public function hasLeftBracket(): bool {
    return !$this->_left_bracket->is_missing();
  }

  public function getLeftBracket(): EditableSyntax {
    return TypeAssert::isInstanceOf(EditableSyntax::class, $this->_left_bracket);
  }

  public function getIndexUNTYPED(): EditableSyntax {
    return $this->_index;
  }

  public function withIndex(EditableSyntax $value): this {
    if ($value === $this->_index) {
      return $this;
    }
    return new self($this->_receiver, $this->_left_bracket, $value, $this->_right_bracket);
  }

  public function hasIndex(): bool {
    return !$this->_index->is_missing();
  }

  public function getIndex(): EditableSyntax {
    return TypeAssert::isInstanceOf(EditableSyntax::class, $this->_index);
  }

  public function getRightBracketUNTYPED(): EditableSyntax {
    return $this->_right_bracket;
  }

  public function withRightBracket(EditableSyntax $value): this {
    if ($value === $this->_right_bracket) {
      return $this;
    }
    return new self($this->_receiver, $this->_left_bracket, $this->_index, $value);
  }

  public function hasRightBracket(): bool {
    return !$this->_right_bracket->is_missing();
  }

  public function getRightBracket(): EditableSyntax {
    return TypeAssert::isInstanceOf(EditableSyntax::class, $this->_right_bracket);
  }
}
