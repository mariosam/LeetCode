/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class NumberOfPeopleAwareOfSecretTest {

    @Test
	public void testNumberOfPeopleAwareOfSecret() throws Exception {
        //Test 1
        int want = 5;
        int got = NumberOfPeopleAwareOfSecret.peopleAwareOfSecret( 6, 2, 4 );
        assertEquals(want, got);
        //Test 2
        want = 6;
        got = NumberOfPeopleAwareOfSecret.peopleAwareOfSecret( 4, 1, 3 );
        assertEquals(want, got);
	}

}
