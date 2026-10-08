/**
 * @version RUST 1.95.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ rustc --test RemoveOutermostParentheses.rs -o /tmp/runner && /tmp/runner
 */
pub struct RemoveOutermostParentheses;

impl RemoveOutermostParentheses {
    pub fn remove_outer_parentheses(s: String) -> String {
        let mut result = String::new();
        let mut depth = 0;

        for ch in s.chars() {
            match ch {
                '(' => {
                    if depth > 0 {
                        result.push(ch);
                    }
                    depth += 1;
                }

                ')' => {
                    depth -= 1;
                    if depth > 0 {
                        result.push(ch);
                    }
                }
                _ => {}
            }
        }
        result
    }
}

#[cfg(test)]
mod tests {
    use super::*;

    #[test]
    fn test_remove_outer_parentheses() {
        // Teste 1
        let want = "()()()";
        let got = RemoveOutermostParentheses::remove_outer_parentheses("(()())(())".to_string());
        assert_eq!(got, want);

        // Teste 2
        let want = "()()()()(())";
        let got = RemoveOutermostParentheses::remove_outer_parentheses("(()())(())(()(()))".to_string());
        assert_eq!(got, want);

        // Teste 3
        let want = "";
        let got = RemoveOutermostParentheses::remove_outer_parentheses("()()".to_string());
        assert_eq!(got, want);
    }
}
