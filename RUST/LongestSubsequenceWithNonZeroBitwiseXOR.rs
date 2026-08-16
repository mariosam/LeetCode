/**
 * @version RUST 1.95.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ rustc --test LongestSubsequenceWithNonZeroBitwiseXOR.rs -o /tmp/runner && /tmp/runner
 */
pub struct LongestSubsequenceWithNonZeroBitwiseXOR;

impl LongestSubsequenceWithNonZeroBitwiseXOR {
    pub fn longest_subsequence(nums: Vec<i32>) -> i32 {
        let mut xor = 0;
        let mut cnt0 = 0;
        let n = nums.len();

        for x in nums {
            xor ^= x;

            if x == 0 {
                cnt0 += 1;
            }
        }

        if xor != 0 {
            return n as i32;
        }

        if cnt0 == n {
            return 0;
        }

        (n - 1) as i32
    }
}

#[cfg(test)]
mod tests {
    use super::*;

    #[test]
    fn test_longest_subsequence() {
        // Teste 1
        let want = 2;
        let got =
            LongestSubsequenceWithNonZeroBitwiseXOR::longest_subsequence(vec![1, 2, 3]);

        assert_eq!(got, want);

        // Teste 2
        let want = 3;
        let got =
            LongestSubsequenceWithNonZeroBitwiseXOR::longest_subsequence(vec![2, 3, 4]);

        assert_eq!(got, want);

        // Teste 3
        let want = 0;
        let got =
            LongestSubsequenceWithNonZeroBitwiseXOR::longest_subsequence(vec![0, 0]);

        assert_eq!(got, want);
    }
}
