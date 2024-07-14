/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class ReverseSubstringsBetweenEachPairOfParenthesesTest {

    @Test
	public void testReverseSubstringsBetweenEachPairOfParentheses() throws Exception {
        //Test 1
        String want = "dcba";
        String got = ReverseSubstringsBetweenEachPairOfParentheses.reverseParentheses( "(abcd)" );
        assertEquals(want, got);
        //Test 2
        want = "iloveu";
        got = ReverseSubstringsBetweenEachPairOfParentheses.reverseParentheses( "(u(love)i)" );
        assertEquals(want, got);
        //Test 3
        want = "leetcode";
        got = ReverseSubstringsBetweenEachPairOfParentheses.reverseParentheses( "(ed(et(oc))el)" );
        assertEquals(want, got);
	}

}
