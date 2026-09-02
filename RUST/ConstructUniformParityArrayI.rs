/**
 * @version RUST 1.95.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ rustc --test ConstructUniformParityArrayI.rs -o /tmp/runner && /tmp/runner
 */
pub struct ConstructUniformParityArrayI;

impl ConstructUniformParityArrayI {
    pub fn uniform_array(nums1: Vec<i32>) -> bool {
        let mut even_cnt = 0;
        let mut odd_cnt = 0;

        for num in nums1 {
            if num % 2 == 0 {
                even_cnt += 1;
            } else {
                odd_cnt += 1;
            }
        }

        (even_cnt >= 1 && odd_cnt >= 1) ||
            even_cnt == 0 ||
            odd_cnt == 0
    }
}

#[cfg(test)]
mod tests {
    use super::*;

    #[test]
    fn test_uniform_array() {
        // Teste 1
        let want = true;
        let got = ConstructUniformParityArrayI::uniform_array([2,3].to_vec());
        assert_eq!(got, want);

        // Teste 2
        let want = true;
        let got = ConstructUniformParityArrayI::uniform_array([4,6].to_vec());
        assert_eq!(got, want);
    }
}
