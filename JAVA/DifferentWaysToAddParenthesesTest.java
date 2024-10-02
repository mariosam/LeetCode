/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;

import java.util.ArrayList;
import java.util.List;

import org.junit.Test;

public class DifferentWaysToAddParenthesesTest {

    @Test
	public void testDetermineIfTwoStringsAreClose() throws Exception {
        //Test 1
        List<Integer> want = new ArrayList<>();
        want.add(2);
        want.add(0);
        List<Integer> got = DifferentWaysToAddParentheses.diffWaysToCompute( "2-1-1" );
        assertEquals(want, got);
        //Test 2
        want = new ArrayList<>();
        want.add(-34);
        want.add(-10);
        want.add(-14);
        want.add(-10);
        want.add(10);
        got = DifferentWaysToAddParentheses.diffWaysToCompute( "2*3-4*5" );
        assertEquals(want, got);
	}

}
