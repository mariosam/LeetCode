/**
 * @version RUST 1.95.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ rustc --test CountCommasInRangeII.rs -o /tmp/runner && /tmp/runner
 */
pub struct CountCommasInRangeII;

impl CountCommasInRangeII {
    pub fn count_commas(n: i64) -> i64 {
        let mut ans = 0;
        let mut x = 1000;

        while x <= n {
            ans += n - x + 1;
            x *= 1000;
        }
        ans
    }
}

#[cfg(test)]
mod tests {
    use super::*;

    #[test]
    fn test_count_commas() {
        // Teste 1
        let want = 3;
        let got = CountCommasInRangeII::count_commas(1002);
        assert_eq!(got, want);

        // Teste 2
        let want = 0;
        let got = CountCommasInRangeII::count_commas(998);
        assert_eq!(got, want);
    }
}
