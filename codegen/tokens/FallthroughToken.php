<?hh
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<e1b214203c16011e17bc1a600165cdc5>>
 */
namespace Facebook\HHAST;

final class FallthroughToken extends EditableToken {

  public function __construct(
    EditableSyntax $leading,
    EditableSyntax $trailing,
  ) {
    parent::__construct('fallthrough', $leading, $trailing, 'fallthrough');
  }

  public function hasLeading(): bool {
    return !$this->getLeading()->is_missing();
  }

  public function withLeading(EditableSyntax $value): this {
    if ($value === $this->getLeading()) {
      return $this;
    }
    return new self($value, $this->getTrailing());
  }

  public function hasTrailing(): bool {
    return !$this->getTrailing()->is_missing();
  }

  public function withTrailing(EditableSyntax $value): this {
    if ($value === $this->getTrailing()) {
      return $this;
    }
    return new self($this->getLeading(), $value);
  }

  public function rewrite_children(
    self::TRewriter $rewriter,
    ?Traversable<EditableSyntax> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $leading = $this->getLeading()->rewrite($rewriter, $parents);
    $trailing = $this->getTrailing()->rewrite($rewriter, $parents);
    if (
      $leading === $this->getLeading() &&
      $trailing === $this->getTrailing()
    ) {
      return $this;
    }
    return new self($leading, $trailing);
  }
}