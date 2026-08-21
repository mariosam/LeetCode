/**
 * @version RUST 1.95.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ rustc --test KthSmallestAmountWithSingleDenominationCombination.rs -o /tmp/runner && /tmp/runner
 */
pub struct KthSmallestAmountWithSingleDenominationCombination;

impl KthSmallestAmountWithSingleDenominationCombination {
    pub fn find_kth_smallest(coins: Vec<i32>, k: i32) -> i64 {
        let n = coins.len();
        let m = 1usize << n;
        let mut lcm = vec![0_i64; m];
        lcm[0] = 1;

        fn gcd(mut a: i64, mut b: i64) -> i64 {
            while a > 0 {
                let temp = a;
                a = b % a;
                b = temp;
            }
            b
        }

        fn bit_count(mut x: usize) -> usize {
            let mut count = 0;

            while x > 0 {
                x &= x - 1;
                count += 1;
            }
            count
        }

        for i in 0..n {
            let v = coins[i] as i64;
            for j in 0..(1usize << i) {
                lcm[j | (1usize << i)] =
                    v / gcd(lcm[j], v) * lcm[j];
            }
        }

        let mut l = 1_i64;
        let mut r = coins[0] as i64 * k as i64;

        while l <= r {
            let md = (l + r) >> 1;
            let mut cnt = 0_i64;

            for i in 1..m {
                if bit_count(i) % 2 == 0 {
                    cnt -= md / lcm[i];
                } else {
                    cnt += md / lcm[i];
                }
            }

            if cnt >= k as i64 {
                r = md - 1;
            } else {
                l = md + 1;
            }
        }
        l
    }
}

#[cfg(test)]
mod tests {
    use super::*;

    #[test]
    fn test_kth_smallest() {
        // Teste 1
        let want = 9;
        let got =
            KthSmallestAmountWithSingleDenominationCombination::find_kth_smallest(vec![3,6,9], 3);

        assert_eq!(got, want);

        // Teste 2
        let want = 12;
        let got =
            KthSmallestAmountWithSingleDenominationCombination::find_kth_smallest(vec![5,2], 7);

        assert_eq!(got, want);
    }
}
