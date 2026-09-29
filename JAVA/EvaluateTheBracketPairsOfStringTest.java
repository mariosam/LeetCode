/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;

import java.util.Arrays;

import org.junit.Test;

public class EvaluateTheBracketPairsOfStringTest {

    @Test
	public void testEvaluateTheBracketPairsOfString() throws Exception {
        //Test 1
        String want = "bobistwoyearsold";
        String got = EvaluateTheBracketPairsOfString.evaluate( "(name)is(age)yearsold", Arrays.asList(Arrays.asList("name","bob"), Arrays.asList("age","two")) );
        assertEquals(want, got);
        //Test 2
        want = "hi?";
        got = EvaluateTheBracketPairsOfString.evaluate( "hi(name)", Arrays.asList(Arrays.asList("a","b")) );
        assertEquals(want, got);
        //Test 3
        want = "yesyesyesaaa";
        got = EvaluateTheBracketPairsOfString.evaluate( "(a)(a)(a)aaa", Arrays.asList(Arrays.asList("a","yes")) );
        assertEquals(want, got);
	}

}
