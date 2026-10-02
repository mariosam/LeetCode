/**
 * @version RUST 1.95.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ rustc --test GenerateParentheses.rs -o /tmp/runner && /tmp/runner
 */
pub struct GenerateParentheses;

impl GenerateParentheses {
    pub fn generate_parenthesis(n: i32) -> Vec<String> {
        let mut ans = Vec::new();
        let mut cur = String::new();
        Self::dfs(n, n, &mut cur, &mut ans);
        ans
    }

    fn dfs(
        left: i32,
        right: i32,
        cur: &mut String,
        ans: &mut Vec<String>,
    ) {
        if left == 0 && right == 0 {
            ans.push(cur.clone());
            return;
        }

        if left > right {
            return;
        }

        if left > 0 {
            cur.push('(');
            Self::dfs(left - 1, right, cur, ans);
            cur.pop();
        }

        if right > 0 {
            cur.push(')');
            Self::dfs(left, right - 1, cur, ans);
            cur.pop();
        }
    }
}

#[cfg(test)]
mod tests {
    use super::*;

    #[test]
    fn test_generate_parenthesis() {
        // Teste 1
        let want = vec!["((()))".to_string(), "(()())".to_string(), "(())()".to_string(), "()(())".to_string(), "()()()".to_string()];
        let got = GenerateParentheses::generate_parenthesis(3);
        assert_eq!(got, want);

        // Teste 2
        let want = vec!["()".to_string()];
        let got = GenerateParentheses::generate_parenthesis(1);
        assert_eq!(got, want);
    }
}
