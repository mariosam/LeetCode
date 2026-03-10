/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertTrue;
import java.util.Arrays;
import java.util.HashSet;
import java.util.Set;

import org.junit.Test;

public class FindUniqueBinaryStringTest {

    private boolean validate(String[] nums, String result) {
        Set<String> set = new HashSet<>(Arrays.asList(nums));
        return result.length() == nums.length && !set.contains(result);
    }

    @Test
    public void testFindDifferentBinaryString() {
        FindUniqueBinaryString sol = new FindUniqueBinaryString();

        // Test 1
        String[] nums1 = {"01","10"};
        String res1 = sol.findDifferentBinaryString(nums1);
        assertTrue(validate(nums1, res1));

        // Test 2
        String[] nums2 = {"00","01"};
        String res2 = sol.findDifferentBinaryString(nums2);
        assertTrue(validate(nums2, res2));

        // Test 3
        String[] nums3 = {"111","011","001"};
        String res3 = sol.findDifferentBinaryString(nums3);
        assertTrue(validate(nums3, res3));
    }

}
