<?hh
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<bc362c2692486065f6c34a9bb16d89a1>>
 */
namespace Facebook\HHAST;

final class DotDotDotToken extends EditableToken {

  public function __construct(
    EditableSyntax $leading,
    EditableSyntax $trailing,
  ) {
    parent::__construct('...', $leading, $trailing, '...');
  }

  public function hasLeading(): bool {
    return !$this->getLeading()->isMissing();
  }

  <<__Override>>
  public function withLeading(EditableSyntax $value): this {
    if ($value === $this->getLeading()) {
      return $this;
    }
    return new self($value, $this->getTrailing());
  }

  public function hasTrailing(): bool {
    return !$this->getTrailing()->isMissing();
  }

  <<__Override>>
  public function withTrailing(EditableSyntax $value): this {
    if ($value === $this->getTrailing()) {
      return $this;
    }
    return new self($this->getLeading(), $value);
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?Traversable<EditableSyntax> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $leading = $this->getLeading()->rewrite($rewriter, $parents);
    $trailing = $this->getTrailing()->rewrite($rewriter, $parents);
    if (
      $leading === $this->getLeading() && $trailing === $this->getTrailing()
    ) {
      return $this;
    }
    return new self($leading, $trailing);
  }
}
