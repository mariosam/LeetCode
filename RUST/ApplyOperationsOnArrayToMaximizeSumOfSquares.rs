/**
 * @version RUST 1.95.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ rustc --test ApplyOperationsOnArrayToMaximizeSumOfSquares.rs -o /tmp/runner && /tmp/runner
 */
pub struct ApplyOperationsOnArrayToMaximizeSumOfSquares;

impl ApplyOperationsOnArrayToMaximizeSumOfSquares {
    pub fn max_sum(nums: Vec<i32>, k: i32) -> i32 {
        let mut dict = [0; 32];
        let modulo = 1_000_000_007_i64;

        for mut num in nums {
            let mut j = 0;
            while num != 0 && j < 32 {
                dict[j] += num & 1;
                num >>= 1;
                j += 1;
            }
        }
        let mut ret = 0_i64;

        for _ in 0..k {
            let mut num = 0_i64;
            for j in (0..32).rev() {
                if dict[j] > 0 {
                    num += 1_i64 << j;
                    dict[j] -= 1;
                }
            }
            ret = (ret + num * num) % modulo;
        }
        ret as i32
    }
}

#[cfg(test)]
mod tests {
    use super::*;

    #[test]
    fn test_max_sum() {
        // Teste 1
        let want = 261;
        let got = ApplyOperationsOnArrayToMaximizeSumOfSquares::max_sum([2,6,5,8].to_vec(), 2);
        assert_eq!(got, want);

        // Teste 2
        let want = 90;
        let got = ApplyOperationsOnArrayToMaximizeSumOfSquares::max_sum([4,5,4,7].to_vec(), 3);
        assert_eq!(got, want);
    }
}
