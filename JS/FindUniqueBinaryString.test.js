/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { findDifferentBinaryString } from './FindUniqueBinaryString.js'

TEST('Starting FindUniqueBinaryString test...', (t) => {
    function validate(nums, result) {
        return result.length === nums.length && !nums.includes(result);
    }

    // Test 1
    let nums = ["01","10"]
    let got = findDifferentBinaryString(nums)
    t.assert(validate(nums, got), "Result should be unique binary string")

    // Test 2
    nums = ["00","01"]
    got = findDifferentBinaryString(nums)
    t.assert(validate(nums, got), "Result should be unique binary string")

    // Test 3
    nums = ["111","011","001"]
    got = findDifferentBinaryString(nums)
    t.assert(validate(nums, got), "Result should be unique binary string")

    t.end()
})
