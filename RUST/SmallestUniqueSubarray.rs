/**
 * @version RUST 1.95.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ rustc --test SmallestUniqueSubarray.rs -o /tmp/runner && /tmp/runner
 */
pub struct SmallestUniqueSubarray;

use std::collections::HashMap;

impl SmallestUniqueSubarray {
    pub fn smallest_unique_subarray(nums: Vec<i32>) -> i32 {
        let n = nums.len();

        let check = |l: usize| -> bool {
            let mut counts: HashMap<i64, i32> = HashMap::with_capacity(n - l + 1);
            let mut unique = 0;

            let mut add = |h: i64| {
                let count = counts.entry(h).or_insert(0);
                *count += 1;

                if *count == 1 {
                    unique += 1;
                } else if *count == 2 {
                    unique -= 1;
                }
            };
            let base: i64 = 131;
            let modu: i64 = 2_147_483_647;
            let mut h = 0i64;
            let mut pow = 1i64;

            for i in 0..l {
                pow = pow * base % modu;
                h = (h * base + nums[i] as i64) % modu;
            }
            add(h);

            for i in l..n {
                h = (h * base
                    - (nums[i - l] as i64 * pow) % modu
                    + modu
                    + nums[i] as i64)
                    % modu;
                add(h);
            }
            unique > 0
        };
        let mut low = 1;
        let mut high = n;

        while low < high {
            let mid = low + (high - low) / 2;

            if check(mid) {
                high = mid;
            } else {
                low = mid + 1;
            }
        }
        low as i32
    }
}

#[cfg(test)]
mod tests {
    use super::*;

    #[test]
    fn test_smallest_unique_subarray() {
        // Teste 1
        let want = 3;
        let got = SmallestUniqueSubarray::smallest_unique_subarray(vec![3,3,3]);
        assert_eq!(got, want);

        // Teste 2
        let want = 1;
        let got = SmallestUniqueSubarray::smallest_unique_subarray(vec![2,1,2,3,3]);
        assert_eq!(got, want);

        // Teste 3
        let want = 2;
        let got = SmallestUniqueSubarray::smallest_unique_subarray(vec![1,1,2,2,1]);
        assert_eq!(got, want);
    }
}
