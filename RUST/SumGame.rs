/**
 * @version RUST 1.95.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ rustc --test SumGame.rs -o /tmp/runner && /tmp/runner
 */
pub struct SumGame;

impl SumGame {
    pub fn sum_game(num: String) -> bool {
        let mut cnt1 = 0;
        let mut cnt2 = 0;
        let mut sum1 = 0;
        let mut sum2 = 0;
        let n = num.len();
        let bytes = num.as_bytes();

        for i in 0..(n / 2) {
            if bytes[i] == b'?' {
                cnt1 += 1;
            } else {
                sum1 += (bytes[i] - b'0') as i32;
            }
        }

        for i in (n / 2)..n {
            if bytes[i] == b'?' {
                cnt2 += 1;
            } else {
                sum2 += (bytes[i] - b'0') as i32;
            }
        }

        if (cnt1 + cnt2) % 2 != 0 {
            return true;
        }
        let sub = 9 * (cnt1 - cnt2) / 2 + (sum1 - sum2);
        sub != 0
    }
}

#[cfg(test)]
mod tests {
    use super::*;

    #[test]
    fn test_sum_game() {
        // Teste 1
        let want = false;
        let got = SumGame::sum_game("5023".into());
        assert_eq!(got, want);

        // Teste 2
        let want = true;
        let got = SumGame::sum_game("25??".into());
        assert_eq!(got, want);

        // Teste 3
        let want = false;
        let got = SumGame::sum_game("?3295???".into());
        assert_eq!(got, want);
    }
}
