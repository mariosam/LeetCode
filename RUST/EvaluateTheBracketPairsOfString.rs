/**
 * @version RUST 1.95.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ rustc --test EvaluateTheBracketPairsOfString.rs -o /tmp/runner && /tmp/runner
 */
pub struct EvaluateTheBracketPairsOfString;

use std::collections::HashMap;

impl EvaluateTheBracketPairsOfString {
    pub fn evaluate(s: String, knowledge: Vec<Vec<String>>) -> String {
        if s.len() == 1 {
            return s;
        }
        let mut map = HashMap::new();

        for info in knowledge {
            let key = info[0].clone();
            let value = info[1].clone();
            map.insert(key, value);
        }
        let chars: Vec<char> = s.chars().collect();
        let mut sb = String::new();
        let mut i = 0;

        while i < chars.len() {
            let current = chars[i];

            if current == ')' {
                i += 1;
                continue;
            } else if current != '(' {
                sb.push(current);
                i += 1;
            } else {
                let mut key = String::new();
                i += 1;

                while chars[i] != ')' {
                    key.push(chars[i]);
                    i += 1;
                }

                if let Some(value) = map.get(&key) {
                    sb.push_str(value);
                } else {
                    sb.push('?');
                }
            }
        }
        sb
    }
}

#[cfg(test)]
mod tests {
    use super::*;

    #[test]
    fn test_evaluate() {
        // Teste 1
        let want = "bobistwoyearsold";
        let got = EvaluateTheBracketPairsOfString::evaluate("(name)is(age)yearsold".into(), vec![vec!["name".to_string(),"bob".to_string()],["age".to_string(),"two".to_string()].to_vec()]);
        assert_eq!(got, want);

        // Teste 2
        let want = "hi?";
        let got = EvaluateTheBracketPairsOfString::evaluate("hi(name)".into(), vec![vec!["a".to_string(),"b".to_string()].to_vec()]);
        assert_eq!(got, want);

        // Teste 3
        let want = "yesyesyesaaa";
        let got = EvaluateTheBracketPairsOfString::evaluate("(a)(a)(a)aaa".into(), vec![vec!["a".to_string(),"yes".to_string()].to_vec()]);
        assert_eq!(got, want);
    }
}
