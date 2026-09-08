/**
 * @version RUST 1.95.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ rustc --test CountCommasInRange.rs -o /tmp/runner && /tmp/runner
 */
pub struct CountCommasInRange;

impl CountCommasInRange {
    pub fn count_commas(n: i32) -> i32 {
        if n >= 1000 {
            n - 999
        } else {
            0
        }
    }
}

#[cfg(test)]
mod tests {
    use super::*;

    #[test]
    fn test_count_commas() {
        // Teste 1
        let want = 3;
        let got = CountCommasInRange::count_commas(1002);
        assert_eq!(got, want);

        // Teste 2
        let want = 0;
        let got = CountCommasInRange::count_commas(998);
        assert_eq!(got, want);
    }
}
