/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class IsomorphicStringsTest {

    @Test
	public void testIsomorphicStrings() throws Exception {
        //Test 1
        boolean want = true;
        boolean got = IsomorphicStrings.isIsomorphic( "egg", "add" );
        assertEquals(want, got);
        //Test 2
        want = false;
        got = IsomorphicStrings.isIsomorphic( "foo", "bar" );
        assertEquals(want, got);
        //Test 3
        want = true;
        got = IsomorphicStrings.isIsomorphic( "paper", "title" );
        assertEquals(want, got);
	}

}
